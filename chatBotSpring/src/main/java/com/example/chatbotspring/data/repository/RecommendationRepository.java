package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.Recommendation;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface RecommendationRepository extends JpaRepository<Recommendation, Long> {

    List<Recommendation> findByDiseaseName(String vanDe);
}
